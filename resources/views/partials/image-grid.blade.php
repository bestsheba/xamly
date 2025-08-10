@foreach($images as $image)
    <div class="gallery-item aspect-square" data-image-id="{{ $image->id }}">
        <img src="{{ Storage::url($image->image_path) }}" 
             alt="Gallery Image"
             class="w-full h-full object-cover rounded-lg shadow-md hover:shadow-xl transition-shadow cursor-pointer gallery-trigger" />
    </div>
@endforeach 