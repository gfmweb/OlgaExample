<script>
export default {
    name: "App",
    data(){
        return{
            dataSource: [
                {
                    key: '1',
                    name: 'Mike',
                    age: 32,
                    address: '10 Downing Street',
                },
                {
                    key: '2',
                    name: 'John',
                    age: 42,
                    address: '10 Downing Street',
                },
            ],

            columns: [
                {
                    title: 'Имя',
                    dataIndex: 'name',
                    key: 'name',
                },
                {
                    title: 'Возраст',
                    dataIndex: 'age',
                    key: 'age',
                },
                {
                    title: 'Адрес',
                    dataIndex: 'address',
                    key: 'address',
                },
            ],
        };
    }
}
</script>

<template>
    <div class="container">
        <p>Hello VUE</p>
        <a-button type="primary">Primary Button</a-button>
        <a-table :dataSource="dataSource" :columns="columns" />
    </div>

</template>

<style scoped>

</style>
