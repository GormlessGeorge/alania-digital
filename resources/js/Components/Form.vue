<template>
    <form class="form" id="form" @submit.prevent="form.post('/create-post')">

        <div class="form__inputs">
            <div class="form__info">
                <p>Шаг 1</p>
                <p>Заполните необходимые поля:</p>
            </div>


            <div class="form__input">
                <label>Регион</label>
                <select  v-model="form.region" name="regions" size="1" id="regions">
                    <option value="javascript">JavaScript</option>
                </select>
            </div>

            <div class="form__input">
                <label>Населённый пункт</label>
                <select v-model="form.town" name="towns" size="1" id="towns">
                    <option value="javascript">JavaScript</option>
                </select>
            </div>

            <div class="form__input">
                <label>Улица</label>
                <select v-model="form.street" name="streets" size="1" id="streets">
                    <option value="javascript">JavaScript</option>
                </select>
            </div>

            <div class="form__input">
                <label>Тип здания</label>
                <select v-model="form.buildingType" name="building-types" size="1" id="building-types">
                    <option value="javascript">JavaScript</option>
                </select>
            </div>

            <div class="form__input">
                <label for="house">Дом</label>
                <input v-model="form.house" name="house" id="house" />
            </div>

            <div class="form__input">
                <label for="building">Корпус</label>
                <input v-model="form.building" name="building" id="building" />
            </div>

        </div>


        <div class="form__map-wrapper">
            <div class="form__info">
                <p>Шаг 2</p>
                <p>Выберите объект на карте:</p>
            </div>
            <div id="map"></div>
        </div>

        <button class="button" type="submit"> Опубликовать </button>

    </form>
</template>

<script setup>
import { onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";


// 2gis
onMounted(() => {
    const map = new mapgl.Map('map', {
        key: '3ad80c1b-cd17-4b37-a39c-02623534a763',
        center: [44.674004534474555, 43.02463979351204],
        zoom: 15,
    });


    let marker = new mapgl.Marker(map, {
        coordinates: [44.67400, 43.02463]
    });


    map.on('click', (e) => {
        if (!e.target) {
            return;
        }
        const { id } = e.target;
        map.setSelectedObjects([id]);
        console.log(e);

        var lng = e.lngLat[0];
        var lat = e.lngLat[1];

        marker.setCoordinates([lng, lat]);
        form.coordinates = e.lngLat;
    });
});

const form = useForm({
    region: "",
    town: "",
    street: "",
    buildingType: "",
    house: "",
    building: "",
    coordinates: []
});

</script>

<style scoped lang="scss">
.form {
    margin-top: 45px;
    display: flex;
    flex-direction: column;
    gap: 80px;


    &__info {
        font-size: 16px;
        color: #797979;

        p:first-child {
            font-size: 20px;
            color: #202020;
        }
    }

    &__inputs {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    &__input {
        display: flex;
        flex-direction: column;
        width: fit-content;
        label {
            font-size: 14px;
        }

        select {
            width: 300px;
            border: none;
            background-color: transparent;
            border-bottom: solid 1px gray;
        }

        input {
            width: 80px;
            border: none;
            background-color: transparent;
            border-bottom: solid 1px gray;
        }
    }
}

.button {
    width: 200px;
    height: 50px;
    background-color: #ae9bca;
    color: white;
    font-weight: bold;
    font-size: 18px;

}

#map {
    margin-top: 20px;
    width: 800px;
    height: 500px;
}
</style>
