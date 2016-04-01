<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\LeadBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class DashboardLeadsInTimeWidgetType
 *
 * @package Mautic\LeadBundle\Form\Type
 */
class DashboardLeadsInTimeWidgetType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('flag', 'choice', array(
                'label'   => 'mautic.lead.list.filter',
                'choices' => array(
                    ''                          => 'mautic.lead.show.all',
                    'identifiedVsAnonymous'     => 'mautic.lead.show.identified.vs.anonymous',
                    'top'                       => 'mautic.lead.show.top',
                    'topIdentifiedVsAnonymous'  => 'mautic.lead.show.top.leads.identified.vs.anonymous'
                ),
                'label_attr' => array('class' => 'control-label'),
                'attr'       => array('class' => 'form-control'),
                'empty_data' => '',
                'required'   => false
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return "lead_dashboard_leads_in_time_widget";
    }
}
