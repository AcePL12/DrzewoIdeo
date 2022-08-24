
@foreach ($categories as $category)

<x-category-item :category="$category" />  


@endforeach
<br> <br>
<hr>

<form method="POST" action="./" style="background-color: darkgray; border: solid 2px black; text-align:center;">
    <legend>Add</legend>
    @csrf
    <label for="name">Nazwa: </label>
    <input type=text name="name" id="name"> <br>
    <label for="Prt_id">Parent Id:</label>
    <input type=number name="Prt_id" placeholder="0" id="Prt_id"> <br>
    <button>send</button>
    <h1> Parent Id dla głównego węzła = 0 </h1>
   
</form>

<hr>
