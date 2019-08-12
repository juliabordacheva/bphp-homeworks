<?php
/**
 * Доступные страницы на сайте
 *
 * @var array $availableLinks
 */
$availableLinks = include './availableLinks.php';

class WrongHeader extends Exception
{
}
class PageNotFound extends Exception
{
}
class Router
{
    public $page;
    public function __construct($name)
    {
        $this->page = $name;
    }
    public function checkPageName()
    {
        if (!array_key_exists('page', $_GET)) {
            throw new WrongHeader('Неверный запрос');
        }
//        $pageName = $_GET['page'];
        if (!array_key_exists($_GET['page'], [
            'article',
            'news',
            'about',
            'main'
        ])) {
            throw new PageNotFound('Запрашиваемая страница не существует');
        }
        return true;
    }
}
$page = new Router('news');
try {
    $page->checkPageName();
    echo "Вы находитесь на странице {$_GET['page']}";
} catch (WrongHeader $e) {
    header('Location: error.php', 400);
} catch (PageNoTFound $e) {
    header('Location: 404.php', 404);
}
