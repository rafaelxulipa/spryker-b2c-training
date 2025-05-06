public function customersAction()
{
    $data = $this->getFacade()->getCustomerList();

    return $this->jsonResponse([
        'data' => $data,
    ]);
}
