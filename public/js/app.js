/**
 * Created by adrian on 16.01.2015.
 */

var app = angular.module('store',['mainCtrl','actorService'],function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});



