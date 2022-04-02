<template>
    <div
        class="text-xl bg-blue-400 text-white w-48 rounded-full m-8 flex justify-center shadow-lg"
    >
        {{ name }} is awesome
    </div>
</template>

<script>
export default {
    props: ["name"],
};
</script>

<style></style>
