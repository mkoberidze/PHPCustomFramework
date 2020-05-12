<?php

class HomeController
{
    public function home()
    {
        return "Home";
    }

    public function contact(IRequest $request, Router $router)
    {
        $data = $request->getBody();
        $errors = [];
        if (!$data['email']) {
            $errors['email'] = "This field is required";
        }

        if (empty($errors)) {
        }
        return $router->renderView('contact', [
            'errors' => $errors,
            'data' => $data
        ]);
    }
}