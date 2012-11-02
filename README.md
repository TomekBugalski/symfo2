symfo2
======

pierwszy projekt;
pierwsza zmiana - dopisek;
kolejna zmiana - poprawienie poprzedniego wpisu;

namespace My\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/jaszczurka.html", name="_jaszczurka")
     * @Template()
     */
    public function jaszczurkaAction()
    {
        return array();
    }

    /**
     * @Route("/zaskroniec.html", name="_zaskroniec")
     * @Template()
     */
    public function zaskroniecAction()
    {
        return array();
    }