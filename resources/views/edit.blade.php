<h1 style="text-align:center; background-color: darkgray">update</h1>
<form action="../edit" method="get" style="background-color: darkgray; border: solid 2px black; text-align:center;"> 
<?php //wiem, że "get" jest niebezpiecznie, ale "post" nie chce mi wykryć    ?>
 @csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<label for="name">Nazwa: </label>
<input type="text" name="title" value="{{$data['title']}}" id="name"> <br>
<label for="prt_id">Parent Id: </label>
<input type="number" name="parent_id" value="{{$data['parent_id']}}" id="prt_id"> <br>
<input type="submit" value="update">
</form>