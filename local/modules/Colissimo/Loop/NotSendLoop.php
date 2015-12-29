<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Colissimo\Loop;

use Colissimo\Model\ColissimoQuery;
use Thelia\Core\Template\Loop\Order;

/**
 * Class NotSendLoop
 * @package Colissimo\Loop
 * @author Manuel Raynaud <manu@raynaud.io>
 */
class NotSendLoop extends Order
{
    /**
     * @return \Thelia\Model\OrderQuery
     */
    public function buildModelCriteria()
    {
        return ColissimoQuery::getOrders();
    }
}
