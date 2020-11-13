
<form action="api/add_award_number.php" method="post">
<table class="table table-bordered table-sm" summary="統一發票中獎號碼單"> 
<tbody>
    <tr> 
            <th id="months">年月份</th>
            <td headers="months" class="title">
                <input type="number" name="year" step="1" min="<?=date("Y")-1?>" max="<?=date("Y")+1?>" value="<?=date("Y")?>">年
                <select name="period">
                    <option value="1">1-2</option>
                    <option value="2">3-4</option>
                    <option value="3">5-6</option>
                    <option value="4">7-8</option>
                    <option value="5">9-10</option>
                    <option value="6">11-12</option>
                </select>月
            </td>
        </tr>
        <tr>
            <th id="specialPrize" rowspan="2">特別獎</th>
            <td headers="specialPrize" class="number">
                <input type="number" name="special_prize" min="00000001" max="99999999">
            </td>
        </tr>
        <tr>
            <td headers="specialPrize"> 同期統一發票收執聯8位數號碼與特別獎號碼相同者獎金1,000萬元 </td>
        </tr>
        <tr>
            <th id="grandPrize" rowspan="2">特獎</th>
            <td headers="grandPrize" class="number">
                <input type="number" name="grand_prize" min="00000001" max="99999999">
            </td>
        </tr>
        <tr>
            <td headers="grandPrize"> 同期統一發票收執聯8位數號碼與特獎號碼相同者獎金200萬元 </td>
        </tr>
        <tr>
            <th id="firstPrize" rowspan="2">頭獎</th>
            <td headers="firstPrize" class="number">
                <!-- 用陣列的方式儲存 first_prize就不會一直被覆蓋 不然$_POST['first_prize']會一直被覆蓋 -->
                <input type="number" name="first_prize[]" min="00000001" max="99999999">
                <input type="number" name="first_prize[]" min="00000001" max="99999999">
                <input type="number" name="first_prize[]" min="00000001" max="99999999">
                <p></p>
            </td>
        </tr>
        <tr hidden>
            <td headers="firstPrize"> 同期統一發票收執聯8位數號碼與頭獎號碼相同者獎金20萬元 </td>
        </tr>
        <tr hidden>
            <th id="twoPrize">二獎</th>
            <td headers="twoPrize"> 同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4萬元 </td>
        </tr>
        <tr hidden>
            <th id="threePrize">三獎</th>
            <td headers="threeAwards"> 同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1萬元 </td>
        </tr>
        <tr hidden>
            <th id="fourPrize">四獎</th>
            <td headers="fourPrizes"> 同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4千元 </td>
        </tr>
        <tr hidden>
            <th id="fivePrize">五獎</th>
            <td headers="fivePrize"> 同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1千元 </td>
        </tr>
        <tr hidden>
            <th id="sixPrize">六獎</th>
            <td headers="sixPrize"> 同期統一發票收執聯末3 位數號碼與 頭獎中獎號碼末3 位相同者各得獎金2百元 </td>
        </tr>
        <tr>
            <th id="addSixPrize">增開六獎</th>
            <td headers="addSixPrize" class="number">
                <!-- 用陣列的方式儲存 add_six_prize就不會一直被覆蓋 不然$_POST['add_six_prize']會一直被覆蓋 -->
                <input type="number" name="add_six_prize[]" min="001" max="999">
                <input type="number" name="add_six_prize[]" min="001" max="999">
                <input type="number" name="add_six_prize[]" min="001" max="999">
            </td>
        </tr>
    </tbody>
</table>
<div class="text-center mb-5">
    <input class="mx-2 btn btn-success" type="submit" value="儲存">
    <input class="mx-2 btn btn-light text-dark" type="reset" value="重置">
</div>
</form>