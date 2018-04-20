<?php
namespace PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use PlatypusBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlatypusBundle:User:index.html.twig', array(
            'error' => false
        ));
    }
    
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder = null)
    {
        $user = new User();
        
        $form = $this->createFormBuilder($user)
                     ->add('username', TextType::class, array('attr' => array('placeholder' => 'Write your username')))
                     ->add('password', RepeatedType::class, array(
                         'error_bubbling' => true,
                         'invalid_message' => "Passwords don't match",
                         'type' => PasswordType::class,
                         'first_options' => array('label' => 'Password'),
                         'second_options' => array('label' => 'Confirm Password')
                     ))
                     ->add('email', EmailType::class, array('attr' => array('placeholder' => 'Write your email')))
                     ->add('first_name', TextType::class, array('attr' => array('placeholder' => 'Write your first name')))
                     ->add('last_name', TextType::class, array('attr' => array('placeholder' => 'Write your last name')))
                     ->add('roles', HiddenType::class)
                     ->add('creation_date', HiddenType::class)
                     ->add('save', SubmitType::class, array('label' => 'Register'))
                     ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
            {

                                     
                $passwordEncoder = $this->get('security.password_encoder');
                $user = $form->getData();
                $newpassword = $passwordEncoder->encodePassword($user, $user->getpassword());
                $user->setpassword($newpassword);
                $user->setroles(array("ROLE_USER"));
                $user->setcreationdate(new \Datetime());
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $session = $request->getSession();
                $session->getFlashBag()->add('success', "The user ".$user->getfirstname()." ".$user->getlastname()." was created.");
                $session->getFlashBag()->add('failure', "Failure of the registration.");
                   
            }
        
        return $this->render('PlatypusBundle:User:register.html.twig', array(
            'form' => $form->createView()
        ));

        return $this->redirectToRoute('register');
    }

    public function loginAction(Request $request)
    {
        $user = new User();
        
        $authUtils = $this->get('security.authentication_utils');
        $error = $authUtils->getLastAuthenticationError();
        
        $lastUsername = $authUtils->getLastUsername();

        return $this->render('PlatypusBundle:User:login.html.twig', array(
            'lastusername' => $lastUsername,
            'error' => $error
        ));
    }

    public function userEditAction(Request $request, UserPasswordEncoderInterface $passwordEncoder = null)
    {
        // $user = new User();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $form = $this->createFormBuilder($user)
                     ->add('username', TextType::class)
                     ->add('password', RepeatedType::class, array(
                         'error_bubbling' => true,
                         'invalid_message' => "Passwords don't match",
                         'type' => PasswordType::class,
                         'first_options' => array('label' => 'Password'),
                         'second_options' => array('label' => 'Confirm Password')
                     ))
                     ->add('email', EmailType::class)
                     ->add('first_name', TextType::class)
                     ->add('last_name', TextType::class)
                     ->add('roles', HiddenType::class, array('data'=>'ROLE_BLOGGER'))
                     ->add('creation_date', HiddenType::class, array('data'=>''))
                     ->add('save', SubmitType::class, array('label' => 'Edit'))
                     ->getForm();

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid())
            {

                                     
                $passwordEncoder = $this->get('security.password_encoder');
                $user = $form->getData();
                $newpassword = $passwordEncoder->encodePassword($user, $user->getpassword());
                $user->setpassword($newpassword);
                $user->setroles(array("ROLE_BLOGGER"));
                $user->setcreationdate(new \Datetime());
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();

                $session = $request->getSession();
                $session->getFlashBag()->add('success', "The user ".$user->getfirstname()." ".$user->getlastname()." was created.");
                $session->getFlashBag()->add('failure', "Failure of the registration.");
                   
            }
        
        return $this->render('PlatypusBundle:User:edit.html.twig', array(
            'form' => $form->createView()
        ));

        return $this->redirectToRoute('edit');
    }   
}