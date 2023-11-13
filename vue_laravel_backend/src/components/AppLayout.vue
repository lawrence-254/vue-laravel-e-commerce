<script setup></script>
<template>
    <div class="min-h-full bg-gray-200 flex">
        <sidebar :class="{'-ml-[200px]':!sidebarOpened}"/>

        <div class="flex-1">
            <Navbar @toggle-sidebar="toggleSidesbar"></Navbar>
            <main class="p-6">
                <router-view>s</router-view>
            </main>
        </div>
    </div>
</template>
<style></style>
