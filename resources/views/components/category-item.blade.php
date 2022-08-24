@props(['category'])
<div style="background-color: grey; text-align:center;">
    <span style="background-color: white; border: solid 2px black">
    {{ $category->title }} ({{$category->id}})  
    </span> <span style="background-color: yellowgreen; border: solid 2px black; text-align:center;">
    <a href={{"index.php/delete/". $category['id'] }}> Delete </a>
    <a href={{"index.php/edit/". $category['id'] }}> Edit </a>
    </span>
    @foreach ($category->children as $child)

    <div style="margin-left: 30px">
        <x-category-item :category="$child"/> 
    </div>
    @endforeach
</div>