app.controller('MainController', ['$scope', function ($scope, $log) {
    $scope.navlist = {
        item1: 'Home',
        item2: 'Body Shops',
        item3: 'FAQ',
        item4: 'Contact Us',
        logo: 'assets/images/AutoQuotable_logo.png'
    };
    $scope.status = {
        isopen: false
    };
    $scope.footerList = {
        name: 'Auto Quotable, Inc.',
        item1: $scope.navlist.item1,
        item3: $scope.navlist.item3,
        item4: $scope.navlist.item4,
        item5: 'Terms of Use',
        item6: 'Privacy Policy',
        logo: $scope.navlist.logo,
        email: 'contact@autoquotable.com',
        item7: 'How It Works',
        item8: 'Sign Up'
    };
    $scope.toggled = function (open) {
        $log.log('Dropdown is now: ', open);
    };
    $scope.toggleDropdown = function ($event) {
        $event.preventDefault();
        $event.stopPropagation();
        $scope.status.isopen = !$scope.status.isopen;
    };
    $scope.navbarCollapsed = true;
}]);