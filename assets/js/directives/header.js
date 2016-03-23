app.directive('appHeader', function () {
    var linkFunction;
    linkFunction = function (scope, element, attrs) {
        $('#menu').on('click', function () {
            $(this).find('i').toggleClass('fa-bars fa-times');
        });
    };
    return {
        link: linkFunction,
		restrict: 'E',
		scope: {
			info: '='
		},
		templateUrl: 'assets/js/directives/header.html'
	};
});