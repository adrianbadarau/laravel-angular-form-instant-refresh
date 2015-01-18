<script>
    var app = angular.module('store',['mainCtrl','actorService'],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

</script>




