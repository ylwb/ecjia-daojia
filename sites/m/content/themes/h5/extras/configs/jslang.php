<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//

/**
 * js语言包设置
 */

defined('IN_ECJIA') or exit('No permission resources.');

return array(
    //comment  模板：user_goods_comment  地址：user/order/goods_comment
    'ok'                               => __('确定', 'h5'),
    'cancel'                           => __('取消', 'h5'),
    'confirm_delete'                   => __('您确定要删除照片？', 'h5'),
    'please_choose_star'               => __('请选择星级!', 'h5'),

    //flow 下单      模板：flow_invoice.dwt	  地址：cart/flow/invoice
    'invoice_desc'                     => __('<div class="inv_img_invoice"><div class="inv_img_invoice_title"><h2>发票税号说明</h2></div>
		                        <div class="inv_img_invoice_content">
		                            <p><b>1、什么是纳税人识别号／统一社会信用代码？</b></p>
		                            <p class="detail">纳税人识别号，通常简称为“税号”，就是税务登记证上的号，每个企业的识别号都是唯一的，相当于税务局颁发给企业的“身份证”号。统一社会信用代码，是一组长度为18位的用于法人和其他组织身份识别的代码。统一社会信用代码由国家标准委发布。2015年10月1日起，国家启动将企业依次申请的工商营业执照，组织机构代码和税务登记证三证合为一证，并将三证号码合并为统一社会信用代码，目前大部分企业均已完成合并，另外有少部分企业其纳税人识别号仍然有效。</p>
		                            <p><b>2、如何获取／知晓纳税人识别号／统一社会信用代码？</b></p>
		                            <p class="detail">您可向贵单位的财务部门索取；另外也可以根据单位名称在国家企业信用信息公示系统（https://www.gsxt.gov.cn/index.html）查询统一社会信用代码。</p>
		                            <p><b>3、为什么要填写纳税人识别号／统一社会信用代码？</b></p>
		                            <p class="detail">根据国家税务总局2017年16号公告，从7月1日起企业（包括公司、非公司制企业法人、企业分支机构、个人独资企业、合伙企业和其他企业）索取票面带有“购买方纳税人识别号”栏目的发票时，应向销售方提供纳税人识别号或统一社会信用代码。因此，当您选择开具单位抬头增值税普通发票时，请根据提示准确填写贵单位号码，以免影响您的发票报销。请注意此公告并不适用于政府机构及事业单位中的非企业单位，因此，如贵单位属于这种类型，可无需填写纳税人识别号／统一社会信用代码，谨慎起见，请您与贵单位财务部门联系确认。</p>
		                        </div>
		                     </div>', 'h5'),
    'yes'                              => __('是', 'h5'),
    'no'                               => __('否', 'h5'),
    'confirm_payment'                  => __('确认支付', 'h5'),
    'please_select_payment'            => __('请选择支付方式', 'h5'),
    'payment_password'                 => __('您还未设置支付密码', 'h5'),
    'requesting'                       => __('请求中...', 'h5'),
    'go_set'                           => __('去设置', 'h5'),


    //franchisee  入驻店铺
    'please_enter_correct_tel'         => __('请输入正确的手机号', 'h5'),
    'prompt'                           => __('提示', 'h5'),
    'view_progress'                    => __('查看申请进度', 'h5'),
    'resend'                           => __('重新发送', 'h5'),
    'please_enter_name'                => __('请输入真实姓名', 'h5'),
    'please_enter_email'               => __('请输入电子邮箱', 'h5'),
    'please_enter_correct_email'       => __('请输入正确的邮箱格式 !', 'h5'),
    'please_enter_tel'                 => __('请输入手机号码', 'h5'),
    'verification_filled'              => __('验证码不能为空', 'h5'),
    'please_store_name'                => __('请输入店铺名称', 'h5'),
    'please_select_store_category'     => __('请选择店铺分类', 'h5'),
    'please_select_type'               => __('请选择入驻类型', 'h5'),
    'please_select_province'           => __('请选择店铺所在省', 'h5'),
    'please_select_city'               => __('请选择店铺所在市', 'h5'),
    'please_select_area'               => __('请选择店铺所在区', 'h5'),
    'please_select_street'             => __('请选择店铺所在街道', 'h5'),
    'please_address'                   => __('请填写店铺详细地址', 'h5'),
    'please_get_store_coordinates'     => __('请获取店铺坐标', 'h5'),
    'please_street'                    => __('请选择街道', 'h5'),
    'please_street_region'             => __('请先选择所在地区', 'h5'),
    'temporarily_no'                   => __('暂无', 'h5'),
    'temporarily_cat'                  => __('暂无店铺分类，未能入驻', 'h5'),
    'finish'                           => __('完成', 'h5'),
    'please_select_province_city'      => __('请选择省市区、街道并填写详细地址', 'h5'),
    'cancel_application'               => __('您确定要撤销申请吗', 'h5'),
    'check_second'                     => __('请查收 (%ss)', 'h5'),
    'resend_second'                    => __('重新发送 %s(s)', 'h5'),
    'please_where_street'              => __('请选择所在街道', 'h5'),
    'individual_settlement'            => __('个人入驻', 'h5'),
    'enterprise_settled'               => __('企业入驻', 'h5'),
    'longitude_latitude'               => __('经度：%s；纬度：%s', 'h5'),


    //goods 商品
    'last'                             => __('剩余', 'h5'),
    'over'                             => __('已结束！', 'h5'),
    'day'                              => __('天', 'h5'),
    'tips'                             => __('温馨提示', 'h5'),
    'activity_end_time'                => __('距离活动结束还有', 'h5'),
    'cart_empty'                       => __('购物车是空的', 'h5'),
    'go_settlement'                    => __('去结算', 'h5'),
    'quantity_out_range'               => __('数量超出范围', 'h5'),
    'logged_yet'                       => __('您还没有登录', 'h5'),
    'shop_cart_empty'                  => __('当前位置购物车空空如也哦～', 'h5'),
    'add_goods_yet'                    => __('您还没有添加商品', 'h5'),
    'go_go'                            => __('去逛逛', 'h5'),
    'reduced'                          => __('(已减%s)', 'h5'),
    'have_select'                      => __('(已选%s件)', 'h5'),
    'deviation_pick_up'                => __('(还差%s起送)', 'h5'),
    'no_goods_reviews'                 => __('暂无商品评论', 'h5'),
    'empty_cart_all_goods'             => __('清空购物车中所有商品？', 'h5'),
    'please_enter_than_0'              => __('请输入数值大于0的整数', 'h5'),
    'store_delete_all_goods'           => __('确定删除该店铺下全部商品？', 'h5'),
    'go_login'                         => __('去登录', 'h5'),
    'all_delete'                       => __('全部删除', 'h5'),
    'edit'                             => __('编辑', 'h5'),
    'all'                              => __('全部', 'h5'),
    'free'                             => __('免费', 'h5'),
    'share_wechat'                     => __('分享微信', 'h5'),
    'sina_weibo'                       => __('新浪微博', 'h5'),
    'save_picture'                     => __('保存图片', 'h5'),
    'collapse'                         => __('收起', 'h5'),
    'full_text'                        => __('全文', 'h5'),
    'cancel_store'                     => __('确定取消关注该店铺？', 'h5'),
    'no_attention_store'               => __('暂无关注店铺', 'h5'),
    'has_been_concerned'               => __('已关注', 'h5'),
    'attention'                        => __('关注', 'h5'),


    //touch
    'positioning_failed'               => __('定位失败，请手动选择', 'h5'),
    'successful_copy'                  => __('复制成功！', 'h5'),
    'clear_cache'                      => __('清除缓存中，请稍后...', 'h5'),
    'history_visit_city'               => __('历史访问城市', 'h5'),
    'click_more'                       => __('点击加载更多', 'h5'),
    'missing_parameters'               => __('缺少参数！', 'h5'),
    'delete_msg'                       => __('您确定要删除此条信息吗？', 'h5'),
    'address_range'                    => __('该地址超出配送范围', 'h5'),
    'empty_search_history'             => __('确定清空搜索记录？', 'h5'),
    'recommendations_updated'          => __('热门推荐已更新', 'h5'),
    'store_delivery_area'              => __('您的定位已超出该店配送区域', 'h5'),
    'know'                             => __('知道了', 'h5'),


    //other
    'remaining'                        => __('剩余', 'h5'),
    'hour'                             => __('时', 'h5'),
    'minute'                           => __('分', 'h5'),
    'second'                           => __('秒', 'h5'),
    'cancel_like'                      => __('取消点赞', 'h5'),
    'like_success'                     => __('点赞成功！', 'h5'),
    'published_successfully'           => __('发表成功！', 'h5'),
    'please_enter_amount'              => __('请输入消费金额', 'h5'),
    'amount_cannot_empty'              => __('消费金额不能为空', 'h5'),
    'amount_cannot_0'                  => __('消费金额不能为0', 'h5'),
    'not_greater_than'                 => __('参与优惠金额不能大于消费总金额', 'h5'),
    'confirm_order'                    => __('确认买单', 'h5'),
    'payment_request'                  => __('支付请求中，请稍后', 'h5'),
    'to_pay'                           => __('去支付', 'h5'),
    'please_open_link'                 => __('请在微信客户端打开链接', 'h5'),
    'no_reward'                        => __('暂无奖励', 'h5'),
    'money_not_empty'                  => __('金额不能为空', 'h5'),
    'please_enter_number'              => __('请输入号码', 'h5'),
    'bonus_not_exist'                  => __('该红包不存在', 'h5'),
    'withdraw_immediately'             => __('立即提现', 'h5'),
    'no_supportable_withdrawal_method' => __('没有可支持的提现方式', 'h5'),
    'please_set_withdraw'              => __('您还未设置提现账号，请设置好再提现', 'h5'),
    'want_delete'                      => __('您确定要删除吗？', 'h5'),
    'no_data'                          => __('暂无数据', 'h5'),
    'failed_delete'                    => __('删除失败', 'h5'),
    'opt_out'                          => __('是否确认退出？', 'h5'),
    'history_msg'                      => __('你确定要清除浏览历史记录吗？', 'h5'),
    'please_enter_code'                => __('请输入验证码', 'h5'),
    'want_cancel'                      => __('你确定要取消吗？', 'h5'),
    'recharge'                         => __('充值', 'h5'),
    'complete_information'             => __('请填写完整信息!', 'h5'),
    'cancel_order'                     => __('您确定要取消该订单吗？', 'h5'),
    'confirm_receipt'                  => __('您确定要确认收货吗？', 'h5'),
    'order_cancellation_reason'        => __('订单取消原因', 'h5'),
    'cancel_your_application'          => __('您确定要撤销申请？', 'h5'),
    'verification'                     => __('验证', 'h5'),
    'cancel_your_current_account'      => __('您确定要注销当前账号吗？', 'h5'),
    'point_reward'                     => __('邀请成功即可获得%s奖励<br>%s可在购买商品时使用', 'h5'),
    'bonus_reward'                     => __('邀请成功即可获得红包奖励<br>红包可在购买商品时使用', 'h5'),
    'money_reward'                     => __('邀请成功即可获得现金奖励<br>现金可在购买商品时使用', 'h5'),
    'no_article_yet'                   => __('暂无文章', 'h5'),
    'resend_css'                       => __('<span></span>重新发送', 'h5'),
    'click_enter'                      => __('暂无浏览记录，点击', 'h5'),
    'enter_browse'                     => __('进入', 'h5'),
    'browse_products'                  => __('浏览商品', 'h5')
);
//end
