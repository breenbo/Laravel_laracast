
<x-layout>
    <div class="w-full flex mt-8 justify-center">
        <form method="POST" action="/register">
            @csrf

            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input type="text" class="input" placeholder="Name" name="name" />

            <label class="label">Email</label>
            <input type="email" class="input" placeholder="Email" name="email" />

            <label class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password"/>

            <button type="submit" class="btn btn-neutral mt-4">Register</button>
            </fieldset>
        </form>
    </div>
</x-layout>
