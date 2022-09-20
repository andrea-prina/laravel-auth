<div class="container">
    <div class="row my-3">
        <div class="col-12">
            <label for="title">Post title</label>
            <input type="text" id="title" class="form-control" name="title" value="{{ old('title', $post->title) }}">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <label for="post_content">Post content</label>
            <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control">{{ old('title', $post->post_content) }}</textarea>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-12">
            <label for="post_image">Post image url</label>
            <input type="text" id="post_image" class="form-control" name="post_image" value="{{ old('post_image', $post->post_image) }}">
        </div>
    </div>
    <input type="submit" value="Save & Publish" class="btn btn-primary">
</div>