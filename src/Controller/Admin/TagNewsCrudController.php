<?php

namespace App\Controller\Admin;

use App\Entity\TagNews;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TagNewsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TagNews::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
