<script>
    var app = angular.module('movies',['movieCtrl','movieService'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
</script>