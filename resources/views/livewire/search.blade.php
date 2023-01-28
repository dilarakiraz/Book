<div>
    <input wire:model="search" name="search" type="text" class="input search-input"
           list="mylist" placeholder="Kitap Adı Ara.." style="width: 400px"/>
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
