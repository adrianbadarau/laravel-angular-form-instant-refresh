<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angular JS Test APP</title>
	{{ HTML::style('css/bootstrap.css') }}
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	{{HTML::script("js/angular.min.js")}}
	{{HTML::script('js/controllers/mainCtrl.js')}}
	{{HTML::script('js/services/actorService.js')}}
	{{HTML::script('js/app.js')}}
	<style>
		body        { padding-top:30px; }
		form        { padding-bottom:20px; }
		.comment    { padding-bottom:20px; }
	</style>
</head>
<body ng-app="store" ng-controller="mainController">
<div class="container">
	<h2>Angular + Laravel Test</h2>
	<div class="row">
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
			<p><% comment.last_name %>></p>

			<p><a href="#" ng-click="deleteActor(actor.actor_id)" class="text-muted">Delete</a></p>
		</div>
	</div>
</div>





</body>
</html>
