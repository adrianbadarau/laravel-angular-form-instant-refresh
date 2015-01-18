<script>
    var app = angular.module('actors',['mainCtrl','actorService'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

</script>




