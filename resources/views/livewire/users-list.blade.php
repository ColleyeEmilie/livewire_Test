<div>
    <form wire:submit="add">
        <div>
        <label for="name">Nom </label>
        <input type="text" name="name" wire:model.live="username" list="jury">
        <datalist id="jury">
            @foreach($this->users as $user)
                <option wire:key="{{$user->id}}" value="{{$user->name}}">
            @endforeach
        </datalist>
    </div>
        <div>
        <label for="email">Email </label>
        <input type="email" name="email" wire:model.live="email" value="@foreach($this->users as $user) {{$user->email}} @endforeach">
    </div>
        <button type="button" wire:click="newUser">Ajouter un contact</button>
    </form>
</div>
