

<form action="" class="w-96 mx-auto mt-96 space-y-5 text-center" wire:submit.prevent="save" method="POST">
    @csrf
    <div>
        <input type="email" class="rounded-full" wire:model.lazy="email_" placeholder="Enter your email">
         @error('email_') <div class="text-red-500"> {{ $message }} </div> @enderror 
    </div>
    <div>
        <input type="password" class="rounded-full" wire:model.lazy="password_"placeholder="Enter your password">
        @error('password_') <div class="text-red-500"> {{ $message }} </div> @enderror 
    </div>

    <div>
        <input type="submit" value="Submit" class="text-center border-2 px-6 py-1 rounded-full bg-gray-500 text-white ">
    </div>
</form>

