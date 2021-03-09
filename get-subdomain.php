$url = array(
    'http://www.domain.com', // www
    'http://domain.com', // --nothing--
    'https://domain.com', // --nothing--
    'www.domain.com', // www
    'domain.com', // --nothing--
    'www.domain.com/some/path', // www
    'http://sub.domain.com/domain.com', // sub
    'http://sub-domain.domain.net/domain.net', // sub-domain
    'sub-domain.third-Level_DomaIN.domain.uk.co/domain.net' // sub-domain
);

foreach ($url as $u) {
    preg_match('/(?:http[s]*\:\/\/)*(.*?)\.(?=[^\/]*\..{2,5})/i', $u, $match);
    var_dump($match);
}