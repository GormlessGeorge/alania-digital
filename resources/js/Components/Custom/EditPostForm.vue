<template>
    <form class="form" id="form" @submit.prevent="form.patch(route('posts.update', post.id))">

        <div class="form__inputs">

            <div class="form__input">
                <label :class="{ error: $page.props.errors.region }">Регион <span>*</span></label>
                <select v-model="form.region" name="regions" size="1" id="regions">
                    <option :value="region.id" v-for="region in regions">{{ region.name }}</option>
                </select>
            </div>


            <div class="form__input">

                <label :class="{ error: $page.props.errors.town }">Населённый пункт <span>*</span></label>
                <select v-model="form.town" name="towns" size="1" id="towns">
                    <option :value="town.id" v-for="town in towns">{{ town.name }}</option>
                </select>
            </div>


            <div class="form__input" >
                <label :class="{ error: $page.props.errors.street }">Улица <span>*</span></label>
                <select v-model="form.street" name="streets" size="1" id="streets">
                    <option :value="street.id" v-for="street in streets">{{ street.name }}</option>
                </select>
            </div>


            <div class="form__input" >
                <label :class="{ error: $page.props.errors.buildingType }">Тип здания <span>*</span></label>
                <select v-model="form.buildingType" name="building-types" size="1" id="building-types">
                    <option :value="buildingType.id" v-for="buildingType in buildingTypes">{{ buildingType.name }}
                    </option>
                </select>
            </div>

            <div class="form__input" :class="{ error: $page.props.errors.houseNumber }">
                <label :class="{ error: $page.props.errors.house }" for="houseNumber">Дом <span>*</span></label>
                <input maxlength="3" v-model="form.houseNumber" name="houseNumber" id="houseNumber"/>
            </div>

            <div class="form__input">
                <label for="building">Корпус</label>
                <input maxlength="3" v-model="form.building" name="building" id="building"/>
            </div>
        </div>


        <div class="form__map-wrapper">
            <div class="form__info">
                <p>Шаг 2</p>
                <p :class="{ error: $page.props.errors.coordinates }">Выберите объект на карте:</p>
            </div>
            <div id="map"></div>
        </div>

        <FormButton>Изменить</FormButton>

    </form>
</template>

<script setup>
import FormButton from "@/Components/Custom/FormButton.vue";
import {useForm} from "@inertiajs/vue3";
import {onMounted} from "vue";
const props = defineProps({
    post: Object,
    regions: Array,
    towns: Array,
    streets: Array,
    buildingTypes: Array
});

//2gis
onMounted(() => {
    const map = new mapgl.Map('map', {
        key: '3ad80c1b-cd17-4b37-a39c-02623534a763',
        center: [Number(props.post.longitude), Number(props.post.latitude)],
        zoom: 15,
    });


    let marker = new mapgl.Marker(map, {
        coordinates: [Number(props.post.longitude), Number(props.post.latitude)]
    });


    map.on('click', (e) => {
        if (!e.target) {
            return;
        }
        const {id} = e.target;
        map.setSelectedObjects([id]);

        var lng = e.lngLat[0];
        var lat = e.lngLat[1];

        marker.setCoordinates([lng, lat]);
        form.coordinates = e.lngLat;
    });
});

const form = useForm({
    region: props.post.region.id,
    town: props.post.town.id,
    street: props.post.street.id,
    buildingType: props.post.buildingType.id,
    houseNumber: props.post.houseNumber,
    building: props.post.building,
    coordinates: [props.post.longitude, props.post.latitude]
});

</script>

<style scoped lang="scss">
.form {
    margin-top: 45px;
    display: flex;
    flex-direction: column;
    gap: 80px;


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
                color: red;
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
