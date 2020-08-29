@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">New Article</h1>


            <form action="">



                <div class="field">
                    <lable class="label" for="title">Title</lable>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                    </div>
                </div>



                <div class="field">
                    <lable class="label" for="excerpt">Excerpt</lable>
                    <div class="control">
                        <textarea class="textarea"  name="excerpt" id="excerpt"></textarea>
                    </div>
                </div>




                <div class="field">
                    <lable class="label" for="body">Body</lable>
                    <div class="control">
                        <textarea class="textarea"  name="body" id="body"></textarea>
                    </div>
                </div>


                <div class="field">
                    <div class="control">
                        <button class="button is-link"  type="submit">Submit</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
@endsection
