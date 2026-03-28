<x-layout>
    <form action="/register" method="post">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto mt-10">
            <legend class="fieldset-legend">Register</legend>

            <label class="label">Name</label>
            <input class="input" name="name" placeholder="Your Name" required />

            <label class="label">Email</label>
            <input type="email" class="input" name="email" placeholder="Your Email" required />

            <label class="label">Password</label>
            <input type="password" class="input" name="password" placeholder="Your Password" required />

            <button class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>