<?php
declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document Redis代理类
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Common;

use Hyperf\Redis\RedisFactory;
use Hyperf\Utils\ApplicationContext;

/**
 * @mixin \Redis
 */
class Redis
{

    const _redisMatchResult = 'plan_match_result_';  //比赛结束的信息

    const _isExistMatchInfo = 'plan_is_exist_match_'; //判断今天是否存在有赔率的足彩比赛

    const _redisMatchResultInfo = 'plan_match_result_info_';  //比赛结果信息储存 用于假用户预测

    const  _redisMatchPlanNum = 'getMatchPlanRedisData';//比赛方案数

    const  _redisTalentPlanRate = 'talentPlanRate';//达人近7日，近1月，近3月的盈利率最高的数值进行储存

    const  _redisUserBrownUserNum = 'brownUserNum';//记录浏览公众号文章的用户信息

    const  _redisShowCompanyWechat = 'isshowCompanyWechat';//记录浏览公众号文章的用户信息

    const  _redisIsSubscribeExpert = 'isSubscribeExpert';//是否关注过专家

    const _theSameFootballMatch = 'the_same_football_match'; //相同的足球比赛列表

    const _theSameBasketballMatch = 'the_same_basketball_match'; //相同的篮球比赛列表

    const _saveToPlanIntelligence = 'save_to_plan_intelligence_task'; // 筛选情报到plan库

    const _pushMessageTaskQueue = 'push_message_task_queue'; // 推送消息任务队列

    const _syncVsiteOrder = 'sync_vsite_order'; // v站情报订单同步队列

    const _videoViewNums= 'video_view_nums'; // 视频展现量统计

    const _chatGroupGoodsReceive = 'chat_group_goods_receive'; // 群聊优惠券是否领取

    const _chatGroupGoodsLock = 'chat_group_goods_lock'; // 群聊优惠券锁

    const _chatGroupIsPopUp = 'chat_group_is_pop_up'; // 群聊优惠券弹窗

    const _commonLockKey = 'common_lock_key'; // 通用锁，操作key前缀

    const  _sportUserSubscribe = 'sport_user_subscribe'; // 鲸猜体育-用户关注

    const  _sportUserMyFans = 'sport_user_my_fans'; // 鲸猜体育-用户粉丝

    const  _getNewNowDomain = 'get_new_now_domain'; // 落地页域名

    const   _getRaiseConsumeConfig = 'getRaiseConsumeConfig'; // 获取用户促进消费配置

    const _chatGroupSendCouponLimit = 'chat_group_send_coupon_limit'; // 群聊发送优惠券限制数量

    const _sensitiveWordsReview = 'sensitiveWordsReview'; // 提交敏感词审核

    const _auto_badword = 'auto_badword'; // 敏感词有更新的标记

    const _expert_rank_config = 'expert_rank_config';// 专家排行配置(命中率、连红数、盈利率)

    const DOMAIN_FORBIDDEN_MSG_SEND = 'domain_forbidden_msg_send'; // 域名被封，消息通知的标识

    //为了不让别人初始化
    private function __construct()
    {
    }

    /**
     * Describe:连接池名称
     * @param string $name 连接池名称
     * @return array
     * Created by zhangzq at 2020/9/16
     */
    public static function getInstance($name = 'default')
    {
        return ApplicationContext::getContainer()->get(RedisFactory::class)->get($name);
    }

    /**
     * Describe:构造可以全局使用的redis静态方法
     * @param $name  方法名
     * @param $arguments 参数列表
     * @return mixed
     * Created by zhangzq at 2020/9/16 13:55
     * 使用其他redis连接配置示例
     * $re = Redis::getInstance('defult1')->hget('photo:activityVoteNum', '120');
     * 使用默认的连接池
     * $re = Redis::hget('photo:activityVoteNum', '120');
     */
    public static function __callStatic($name, $arguments)
    {
        return self::getInstance()->$name(...$arguments);
    }

}