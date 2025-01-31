<div>
    {{-- start banner --}}
    <div>
        <img src="{{ asset('images/signup-banner.jpg') }}" alt="" />
    </div>
    {{-- end banner --}}

    {{-- start signup section --}}
    <div class="fixed bottom-0 w-full max-w-sm bg-white p-4 rounded-t-2xl">
        <div class="flex flex-col gap-1 mt-4">
            <h2 class="text-2xl font-semibold">Create account</h2>
            <p class="text-sm font-light text-slate-400/80">
                Quickly create account
            </p>
        </div>

        {{-- start signup form --}}
        <form action="" class="mt-4">
            <div class="flex items px-6 py-4 items-center gap-5">
                <label for="email">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-slate-400/80">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                    </svg>
                </label>
                <input type="text" name="email" id="email" placeholder="Email Address"
                    class="text-sm w-full p-2" />
            </div>
            <div class="flex items px-6 py-4 items-center gap-5">
                <label for="phone">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6 text-slate-400/80">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                    </svg>
                </label>
                <input type="text" name="phone" id="phone" placeholder="Phone number"
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

            {{-- btn signup --}}
            @livewire('components.button', ['label' => 'Sign Up'])

            {{-- login redirect --}}
            <div>
                <p class="text-center text-sm font-light my-5 text-slate-400/80">
                    Already have an account ?
                    <a href="{{ route('login') }}" wire:navigate class="text-primary font-medium">Login</a>
                </p>
            </div>
        </form>
        {{-- end signup form --}}
    </div>
    {{-- end signup section --}}
</div>
