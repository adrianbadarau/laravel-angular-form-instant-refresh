@extends("main")

@section('scripts')
    @include("movies.angular.services.movieService")
    @include("movies.angular.controllers.movieCtrl")
    @include("movies.angular.app")
@stop

@section('content')
{{--START MOVIES VIEW--}}
<div class="row" ng-app="movies" ng-controller="moviesController">

    <h2>All movies</h2>
    <div ng-repeat="movie in movies">
        <blockquote>
            <strong class="text-center "><% movie.title %></strong>
            <p><% movie.description %></p>
            {{--<footer><% movie.review %></footer>--}}
        </blockquote>
        <button type="button" class="btn btn-primary" ng-click="editMovie(movie.id)">
            Edit Movie
        </button>
        <button type="button" class="btn btn-primary" ng-click="deleteMovie(movie.id)">
            Delete Movie
        </button>
    </div>
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#moviesModal">
        Add New Movie
    </button>


<!-- Modal For Adding new Movie -->
<div class="modal fade" id="moviesModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add a new movie</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" ng-submit="submitMovie()">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 control-label">Title: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title" id="title" placeholder="Movie Title" ng-model="movieData.title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 control-label">Description: </label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="description" placeholder="A short description about the movie" ng-model="movieData.description"></textarea>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
                </form>
        </div>
    </div>
</div>

    <!-- Modal For Editing A Movie -->
    <div class="modal fade" id="movieEditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add a new movie</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" ng-submit="updateMovie()">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 control-label">Title: </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" id="title" placeholder="Movie Title" ng-model="movieEditData.title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 control-label">Description: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" placeholder="A short description about the movie" ng-model="movieEditData.description"></textarea>
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>


</div>
{{--END MOVIES VIEW--}}
@stop