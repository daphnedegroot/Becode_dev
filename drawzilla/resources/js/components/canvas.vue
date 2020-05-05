<template>
    <paintable
    alwaysOnTop
    :active="isActive"
    :width="800"
    :height="800"
    :disableNavigation="disableNavigation"
    :hide="hidePaintable"
    :horizontalNavigation="true"
    :navigation="navigation"
    :name="isFirstPaintable ? 'my-screen' : 'my-second-screen'"
    :factor="1"
    :lineWidth="dynamicLineWidth"
    :lineWidthEraser="20"
    :useEraser="useEraser"
    :color="color"
    class="paint"
    ref="paintable"
    @toggle-paintable="toggledPaintable"
    >
        <router-view></router-view>
    </paintable>
</template>

<script>
    export default {
        name: "canvas"
    }
</script>

<style scoped>

</style>