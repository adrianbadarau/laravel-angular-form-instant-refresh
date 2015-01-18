<script>
    angular.module('movieCtrl',[])
            .controller('moviesController', function ($scope, $http, Movie) {
                $scope.movieData = {};
                $scope.loading = true;
                Movie.get().success(function (data) {
                    $scope.movies = data;
                    $scope.loading = false;
                });
                $scope.submitMovie = function () {
                    $scope.loading = true;
                    Movie.save($scope.movieData).success(function (data) {
                        Movie.get().success(function (getData) {
                            $scope.movies = getData;
                            $scope.loading = false;
                            $scope.movieData = {};
                            $('#moviesModal').modal('hide');
                        });
                    }).error(function (data) {
                        console.log(data);
                    });
                };
                $scope.movieEditData={};
                $scope.editMovie = function (id) {
                    $scope.loading = true;
                    Movie.show(id).success(function (data) {
                        $scope.movieEditData = data;
                        $scope.loading = false;
                        $('#movieEditModal').modal('show');
                    }).error(function (data) {
                        console.log(data);
                    });
                };
                $scope.updateMovie = function () {
                    $scope.loading = true;
                    var id = $scope.movieEditData.id;
                    Movie.update(id,$scope.movieEditData).success(function (data) {
                        Movie.get().success(function (getData) {
                            $scope.movies = getData;
                            $scope.loading =false;
                            $scope.movieEditData = {};
                            $('#movieEditModal').modal('hide');
                        }).error(function (data) {
                            console.log(data);
                        });
                    });
                };
                $scope.deleteMovie = function (id) {
                    $scope.loading = true;
                    Movie.destroy(id).success(function (data) {
                        Movie.get().success(function (getData) {
                            $scope.movies = getData;
                            $scope.loading = false;
                        });
                    }).error(function (data) {
                        console.log(data);
                    });
                };
            });
</script>