/**
 * Created by adrian on 17.01.2015.
 */
angular.module('mainCtrl',[])

.controller('mainController', function($scope, $http, Actor){
        $scope.actorData={};
        $scope.loading = true;
        Actor.get().success(function(data){
            $scope.actors = data;
            $scope.loading = false;
        });
        $scope.submitActor = function(){
            $scope.loading = true;
            Actor.save($scope.actorData).success(function(data){
                Actor.get().success(function(getData){
                    $scope.actors = getData;
                    $scope.loading = false;
                });
            }).error(function (data) {
                console.log(data);
            });
        };
        $scope.deleteActor = function (id) {
            $scope.loading = true;
            Actor.destroy(id).success(function (data) {
                Actor.get().success(function (getData) {
                    $scope.actors = getData;
                    $scope.loading = false;
                });
            }).error(function (data) {
                console.log(data);
            });
        };
    });