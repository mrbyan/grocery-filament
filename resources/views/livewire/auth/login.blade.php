<div>
    <!-- banner -->
    <div>
        <img src="https://placehold.co/400x600" alt="" />
    </div>

    <!-- bottom -->
    <div class="fixed bottom-0 w-full max-w-sm bg-white p-4 rounded-t-2xl">
        <div class="flex flex-col gap-1 mt-4">
            <h2 class="text-2xl font-semibold">Welcome back !</h2>
            <p class="text-sm font-light text-slate-400/80">
                Sign in to your account
            </p>
        </div>

        <!-- form -->
        <form action="" class="mt-4">
            <div class="flex items px-6 py-4 items-center gap-5">
                <label for="email">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-slate-400/80">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </label>
                <input type="email" name="email" id="email" placeholder="Email Address"
                    class="text-sm w-full p-2" />
            </div>
            <div class="flex items px-6 py-4 items-center gap-5">
                <label for="password">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-slate-400/80">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </label>
                <input type="password" name="password" id="password" placeholder="Password"
                    class="text-sm w-full p-2" />
            </div>
        </form>

        <div class="flex items-center justify-between mt-5">
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" id="remember"
                    class="h-4 w-4 text-primary focus:ring-primary border-gray-300" />
                <label for="remember" class="text-sm text-slate-400/80">Remember me</label>
            </div>
            <a href="#" class="text-primary text-sm font-medium text-center block">
                Forgot Password?
            </a>
        </div>

        <!-- btn login -->
        @livewire('components.button', ['label' => 'Login'])

        <!-- signup redirect -->
        <div>
            <p class="text-center text-sm font-light my-5 text-slate-400/80">
                Don't have an account?
                <a href="{{ route('signup') }}" wire:navigate class="text-primary font-medium">Sign Up</a>
            </p>
        </div>
    </div>
</div>
