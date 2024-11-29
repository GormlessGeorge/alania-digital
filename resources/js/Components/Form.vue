<template>
    <form class="form" id="form" @submit.prevent="form.post('/create-post')">

        <div class="form__inputs">
            <div class="form__info">
                <p>Шаг 1</p>
                <p>Заполните необходимые поля:</p>
            </div>


            <div class="form__input" :class="{ error: $page.props.errors.region }" >
                <label>Регион <span>*</span></label>
                <select  v-model="form.region" name="regions" size="1" id="regions">
                    <option :value="region.id" v-for="region in regions">{{region.name}}</option>
                </select>
            </div>

            <div class="form__input" :class="{ error: $page.props.errors.town }" >
                <label>Населённый пункт <span>*</span></label>
                <select v-model="form.town" name="towns" size="1" id="towns">
                    <option :value="town.id" v-for="town in towns">{{ town.name }}</option>
                </select>
            </div>

            <div  class="form__input" :class="{ error: $page.props.errors.street }">
                <label>Улица <span>*</span></label>
                <select v-model="form.street" name="streets" size="1" id="streets">
                    <option :value="street.id" v-for="street in streets" >{{ street.name }}</option>
                </select>
            </div>

            <div class="form__input" :class="{ error: $page.props.errors.buildingType }" >
                <label>Тип здания <span>*</span></label>
                <select v-model="form.buildingType" name="building-types" size="1" id="building-types">
                    <option :value="buildingType.id" v-for="buildingType in buildingTypes">{{buildingType.name}}</option>
                </select>
            </div>

            <div class="form__input" :class="{ error: $page.props.errors.house }" >
                <label for="house">Дом <span>*</span></label>
                <input  maxlength="3" v-model="form.house" name="house" id="house" />
                <p v-if="$page.props.errors.house">{{$page.props.errors.house}}</p>
            </div>

            <div class="form__input">
                <label for="building">Корпус</label>
                <input maxlength="3" v-model="form.building" name="building" id="building" />
            </div>

        </div>


        <div class="form__map-wrapper">
            <div class="form__info">
                <p>Шаг 2</p>
                <p>Выберите объект на карте:</p>
            </div>
            <div id="map"></div>
            <p v-if="$page.props.errors.coordinates">{{$page.props.errors.coordinates}}</p>
        </div>


        <button class="button" type="submit"> Опубликовать </button>

    </form>
</template>

<script setup>
import { onMounted } from "vue";
import { useForm } from "@inertiajs/vue3";

defineProps({
    regions: Array,
    towns: Array,
    streets: Array,
    buildingTypes: Array
});

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
            span {
                color:red;
            }
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
    background-color: #4E5AA4;
    color: white;
    font-weight: bold;
    font-size: 18px;

}

#map {
    margin-top: 20px;
    width: 800px;
    height: 500px;
}

.error {
    color: red;
}


input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}


input[type=number] {
    -moz-appearance: textfield;
}
</style>
