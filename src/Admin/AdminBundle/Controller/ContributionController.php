<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contribution;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ContributionController extends Controller
{
    /**
     * Lists all members contributions entities
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contribution  = $em->getRepository('AppBundle:Contribution')->findAll();

        return $this->render('@Admin/Default/contribution_index.html.twig',[
            'contribution' => $contribution,
        ]);
    }

    public function makePdfAction()
    {
        $em = $this->getDoctrine()->getManager();
        $contribution  = $em->getRepository('AppBundle:Contribution')->findAll();
        $file = "Dons";
        $html = $this->render('@Admin/Pdf/contributions.html.twig',[
            'contribution' => $contribution,
        ]);

     
       $this->returnPDFResponseFromHTML($html, $file);
    }




    public function returnPDFResponseFromHTML($html, $file)
    {
        $PDF_HEADER_LOGO ;
        $PDF_HEADER_LOGO_WIDTH = 20; 
        $PDF_MARGIN_HEADER = 2;  
        $PDF_MARGIN_FOOTER = 5;
        $PDF_HEADER_TITLE = "Association les colombes";
        $PDF_HEADER_STRING = "tel: 123456789/email: contact@aee-assolescolombes.com/site-web: www.aee-assolescolombes.com/nrc: 00056789237";
        
        
        $pdf = $this->get("white_october.tcpdf")->create('vertical', PDF_UNIT, 'A4', true, 'UTF-8', true);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Our Code World');
        $pdf->SetTitle(('Our Code World Title'));
        $pdf->SetSubject('Our Code World Subject');
        // set margins
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);       
        $pdf->SetFont('helvetica', '', 12, '', true);

        // set default header data
       
        $pdf->setFooterData(array(0,64,0), array(0,64,128));
        // set header and footer fonts
        $pdf->setHeaderFont(Array('helvetica', '', 10));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));


        $pdf->SetMargins(10,15,10, 15);
        $pdf->AddPage();
        

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        $filename = $file;
        
       
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);


        $pdf->Output($filename.".pdf",'I'); // This will output the PDF as a response directly
    }

}