@extends("main")
@section('scripts')
    @include("actors.angular.services.actorService")
    @include("actors.angular.controllers.mainCtrl")
    @include("actors.angular.app")
@stop
@section('content')
    <div class="row" ng-app="actors" ng-controller="mainController">
        <form ng-submit="submitActor()"> <!-- ng-submit will disable the default form action and use our function -->

            <!-- AUTHOR -->
            <div class="form-group">
                <input type="text" class="form-control input-sm" name="first_name" ng-model="actorData.first_name" placeholder="Name">
            </div>

            <!-- COMMENT TEXT -->
            <div class="form-group">
                <input type="text" class="form-control input-lg" name="last_name" ng-model="actorData.last_name" placeholder="Say what you have to say">
            </div>

            <!-- SUBMIT BUTTON -->
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
        <% 3+2 %>
        <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

        <div class="comment" ng-hide="loading" ng-repeat="actor in actors">
            <h3>Comment #<% actor.id %> <small>by <% actor.first_name %> </h3>
            <p><% actor.last_name %></p>

            <p><a href="#" ng-click="deleteActor(actor.id)" class="text-muted">Delete</a></p>
        </div>
    </div>


@stop
