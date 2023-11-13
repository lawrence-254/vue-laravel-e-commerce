<template>


<GuestLayout title="Sign in into your account" @submit="login">
                <div>
                    <label class="block text-sm font-medium leading-6 text-gray-900">Login</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required="true" placeholder="Enter email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                    </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" autocomplete="current-password" required="true" placeholder="Enter password"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <div>
                            <input type="checkbox" name="remember_me" id="myCheckbox">
                            <label for="myCheckbox"> Remember Me?</label>
                    </div>

                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div>
                    </div>

                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            <!-- </form> -->
    </GuestLayout>
            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                {{ ' ' }}
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up</a>
        </p>
</template>

<script setup>
import GuestLayout from '../components/GuestLayout.vue';

function login(){
    console.log('logged in');
}
</script>
<style scoped>
/* Your scoped styles here */
</style>


