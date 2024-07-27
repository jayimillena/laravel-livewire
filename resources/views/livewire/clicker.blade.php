<div>
    <form wire:submit="createNewUser">
        <input type="text" name="name" id="name" placeholder="Name" wire:model="name"/>
        <input type="email" name="email" id="email" placeholder="Email" wire:model="email"/>
        <input type="password" name="password" id="password" placeholder="Password" wire:model="password"/>
        <button>
            Create
        </button>
    </form>
    <hr>
    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
