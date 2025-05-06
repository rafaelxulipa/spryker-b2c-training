namespace Pyz\Zed\CustomerMerchantPortal\Business;

use Generated\Shared\Transfer\CustomerCriteriaTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

class CustomerMerchantPortalFacade extends AbstractFacade
{
    public function getCustomerList(): array
    {
        $customerCollection = $this->getFactory()
            ->getCustomerFacade()
            ->getCustomerCollection(new CustomerCriteriaTransfer());

        $customers = [];
        foreach ($customerCollection->getCustomers() as $customerTransfer) {
            $customers[] = [
                'id' => $customerTransfer->getIdCustomer(),
                'name' => $customerTransfer->getFirstName() . ' ' . $customerTransfer->getLastName(),
                'email' => $customerTransfer->getEmail(),
                'createdAt' => $customerTransfer->getCreatedAt(),
            ];
        }

        return $customers;
    }
}
