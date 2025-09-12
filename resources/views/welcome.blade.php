@extends('layouts.app')

@section('title', 'CourseCraft')

@section('content')
<div class="container">
    <h1 class="mb-4">Create a Course</h1>

    <form class="course-form">

        {{-- Course Title & Video --}}
        <div class="row">
            <div class="col-md-6">
                <label for="courseTitle" class="form-label">Course Title</label>
                <input type="text" class="form-control" id="courseTitle" placeholder="Enter Course Title">
            </div>
            <div class="col-md-6">
                <label for="featureVideo" class="form-label">Feature Video Link</label>
                <input type="text" class="form-control" id="featureVideo" placeholder="Enter YouTube/Drive link for feature video">
            </div>
        </div>

        {{-- Description + Upload in same row --}}
<div class="row">
    <div class="col-md-6">
        <label for="description" class="control-label">Course Description</label>
        <div id="summernote1"></div>
        <button type="button" class="btn btn-primary upload-btn">Upload</button>
    </div>

    <div class="col-md-6">
        <label class="control-label">Thumbnail/Feature Photo</label>
        <div class="dropzone-wrapper text-center p-4 border rounded">
            <div class="dropzone-desc">
                <i class="glyphicon glyphicon-download-alt"></i>
                <p>Choose an image file or drag it here.</p>
            </div>
            <input type="file" name="img_logo" class="dropzone">
        </div>
        <button type="button" class="btn btn-primary mt-2">Upload</button>
    </div>
</div>


        {{-- Category / Level / Price / Discount --}}
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" class="form-control">
                    <option selected>Choose...</option>
                    <option>Development</option>
                    <option value="__add_new__">➕ Add new category...</option>
                </select>
            </div>
             <!-- Hidden input group for new category -->
            <div id="newCategoryGroup" class="input-group" style="margin-top:8px; display:none;">
                <input type="text" id="newCategoryInput" class="form-control" placeholder="Enter new category">
                <span class="input-group-btn">
                    <button class="btn btn-success" type="button" id="saveCategory">Save</button>
                    <button class="btn btn-default" type="button" id="cancelCategory">Cancel</button>
                </span>
            </div>
            <div class="col-md-3">
                <label for="level" class="form-label">Level</label>
                <select id="level" class="form-control">
                    <option selected>Choose...</option>
                    <option>Beginner</option>
                    <option>Ameture</option>
                    <option>Intermediate</option>
                    <option>Professional</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Price of the Course">
            </div>
            <div class="col-md-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="text" class="form-control" id="discount" placeholder="Discount Percentage">
            </div>
        </div>

        {{-- Duration / Language / Audience --}}
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="duration" class="form-label">Course Duration</label>
                <input type="text" class="form-control" id="duration" placeholder="Course Duration hour/week">
            </div>
            <div class="col-md-4">
                <label for="language" class="form-label">Language</label>
                <select id="language" class="form-control">
                    <option selected>Choose...</option>
                    <option>English</option>
                    <option>Bangla</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="audience" class="form-label">Target Audience</label>
                <input type="text" class="form-control" id="audience" placeholder="Target Audience">
            </div>
        </div>

        {{-- Prerequisites & Learning Outcomes --}}
        <div class="row mt-3">
            <div class="col-md-6">
                <label for="prerequisites" class="form-label">Prerequisites</label>
                <div id="summernote2"></div>
                <button type="button" class="btn btn-primary upload-btn">Upload</button>
            </div>
            <div class="col-md-6">
                <label for="outcomes" class="form-label">Learning Outcomes</label>
                <div id="summernote3"></div>
                <button type="button" class="btn btn-primary upload-btn">Upload</button>
            </div>
        </div>

        {{-- MODULES --}}
        <!-- MODULE EXAMPLE -->

        <div id="modulesContainer"></div>
        <button type="button" class="btn btn-success" id="addModule">Add Module +</button>
        <br><br>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="submit" class="btn btn-danger">Cancel</button>
  
    </form>
</div>
@endsection
