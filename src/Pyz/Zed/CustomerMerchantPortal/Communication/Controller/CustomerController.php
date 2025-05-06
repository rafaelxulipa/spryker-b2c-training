namespace Pyz\Zed\CustomerMerchantPortal\Communication\Controller;

use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class CustomerController extends AbstractController
{
    public function indexAction()
    {
        return $this->viewResponse();
    }
}
