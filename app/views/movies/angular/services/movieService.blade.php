<script>
    angular.module('movieService',[])
        .factory('Movie', function ($http) {
           return{
               get: function () {
                   return $http.get('{{URL::route('movies.index')}}');
               },
               show: function (id) {
                   return $http.get('{{URL::route('movies.index')}}/'+id+'/edit');
               },
               save: function (movieData) {
                   return $http({
                       method: 'POST',
                       url: '{{URL::route('movies.index')}}',
                       headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
                       data: $.param(movieData)
                   });
               },
               update: function (id, movieData) {
                   {{--return $http({--}}
                       {{--method: 'PUT',--}}
                       {{--url: '{{URL::route('movies.index')}}/'+id,--}}
                       {{--headers: {'Content-Type' : 'application/x-www-form-urlencoded'},--}}
                       {{--data: $.param(movieData)--}}
                   {{--});--}}
                   return $http.put('{{URL::route('movies.index')}}/'+id, movieData);
               },
               destroy: function (id) {
                   return $http.delete('{{URL::route('movies.index')}}/'+id);
               }
           }
        });
</script>