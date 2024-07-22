<template>

    <div class="flex items-center justify-between py-4">
        <button class="bg-indigo-500 text-white p-2 rounded" v-on:click.prevent="addToCart">Ajouter au panier</button>

    </div>
</template>


<script setup>
import axios from 'axios';
import  useProduct  from '@/composables/products';
import useEventBus from '../eventBus.js';
import { inject } from 'vue';

const { add } = useProduct();
const { emit } = useEventBus();
const productId = defineProps(['productId']);
const toast = inject('toast')


const addToCart = async () => {

    await axios.get('/sanctum/csrf-cookie');
    await axios.get('/api/user')
        .then(async (res) => {
         let cartCount =   await add(productId);
            emit('cartCountUpdated', cartCount)
            toast.success('Produit ajouté au panier');

        })
        .catch(() => {
        toast.error ('Vous devez être connecté pour ajouter au panier');
        });

};

</script>
