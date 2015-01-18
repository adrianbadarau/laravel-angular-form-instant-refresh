<script>
    angular.module('actorService',[])
        .factory('Actor',function($http){
            return{
                get: function(){
                    return $http.get('http://localhost:8080/Angular-Test/public/actors');
                },
                save: function(actorData){
                    return $http({
                        method: 'POST',
                        url: 'http://localhost:8080/Angular-Test/public/actors',
                        headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
                        data: $.param(actorData)
                    });
                },
                destroy: function(id){
                    return $http.delete('http://localhost:8080/Angular-Test/public/actors'+id);
                }
            }
        });
</script>
