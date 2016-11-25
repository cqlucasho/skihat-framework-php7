<?php
# 写入安全配置
Skihat::write('kernels/securities', [
    'authentications' => ['default' => [SKIHAT_IOC_CLASS => 'controllers.filters.security_authenticate', SKIHAT_IOC_PATHS => SKIHAT_PATH_LIBRARY]],
    'authorizations' => []
]);
Skihat::import('controllers.filters.security_filter', SKIHAT_PATH_LIBRARY);

class SecurityTest extends PHPUnit_Framework_TestCase {
    public function testAuthenticate() {
        //(new SecurityFilter())->authenticate(true);
    }
}