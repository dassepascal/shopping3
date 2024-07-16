import {ref} from 'vue';

export default function useProducts() {

    const products = ref([]);
    const cartCount = ref(0);


    const getProducts = async() => {
        let response = await axios.get('/api/products');
        console.log(response.data)
        products.value = response.data.cartContent;
        cartCount.value = response.data.cartCount
    }
    const add= async(productId) => {
        let response = await axios.post('/api/products',{
            productId: productId
        });


        return response.data.count
    }
    const getCount = async() => {
        let response = await axios.get('/api/products/count');
        //console.log(response.data.count)
        return response.data.count
    }

    return {
        add,
        getCount,
        getProducts,
        products,
        cartCount
    }
}
