<?php
/**
 * ClassMap 
 * @date 08/07/2012
 */
/**
 * ClassMap
 * @date 08/07/2012
 */
class XiQuotesClassMap
{
	final public static function classMap()
	{
		return array (
  'GetQuickQuotes' => 'XiQuotesTypeGetQuickQuotes',
  'GetQuickQuotesResponse' => 'XiQuotesTypeGetQuickQuotesResponse',
  'ArrayOfQuickQuote' => 'XiQuotesTypeArrayOfQuickQuote',
  'QuickQuote' => 'XiQuotesTypeQuickQuote',
  'Common' => 'XiQuotesTypeCommon',
  'Header' => 'XiQuotesTypeHeader',
  'GetSingleQuote' => 'XiQuotesTypeGetSingleQuote',
  'GetSingleQuoteResponse' => 'XiQuotesTypeGetSingleQuoteResponse',
  'Quote' => 'XiQuotesTypeQuote',
  'GetQuotes' => 'XiQuotesTypeGetQuotes',
  'GetQuotesResponse' => 'XiQuotesTypeGetQuotesResponse',
  'ArrayOfQuote' => 'XiQuotesTypeArrayOfQuote',
  'GetQuotesByIdentifiers' => 'XiQuotesTypeGetQuotesByIdentifiers',
  'GetQuotesByIdentifiersResponse' => 'XiQuotesTypeGetQuotesByIdentifiersResponse',
  'GetQuote' => 'XiQuotesTypeGetQuote',
  'GetQuoteResponse' => 'XiQuotesTypeGetQuoteResponse',
  'ExtendedQuote' => 'XiQuotesTypeExtendedQuote',
  'StockQuote' => 'XiQuotesTypeStockQuote',
  'StockStatistics' => 'XiQuotesTypeStockStatistics',
  'ArrayOfStockNews' => 'XiQuotesTypeArrayOfStockNews',
  'StockNews' => 'XiQuotesTypeStockNews',
  'GetTopMovers' => 'XiQuotesTypeGetTopMovers',
  'GetTopMoversResponse' => 'XiQuotesTypeGetTopMoversResponse',
  'ArrayOfTop' => 'XiQuotesTypeArrayOfTop',
  'Top' => 'XiQuotesTypeTop',
  'GetTopGainers' => 'XiQuotesTypeGetTopGainers',
  'GetTopGainersResponse' => 'XiQuotesTypeGetTopGainersResponse',
  'GetTopLosers' => 'XiQuotesTypeGetTopLosers',
  'GetTopLosersResponse' => 'XiQuotesTypeGetTopLosersResponse',
  'GetTop' => 'XiQuotesTypeGetTop',
  'GetTopResponse' => 'XiQuotesTypeGetTopResponse',
  'GetTopsByExchange' => 'XiQuotesTypeGetTopsByExchange',
  'GetTopsByExchangeResponse' => 'XiQuotesTypeGetTopsByExchangeResponse',
  'ListTopExchanges' => 'XiQuotesTypeListTopExchanges',
  'ListTopExchangesResponse' => 'XiQuotesTypeListTopExchangesResponse',
  'ArrayOfTopExchange' => 'XiQuotesTypeArrayOfTopExchange',
  'TopExchange' => 'XiQuotesTypeTopExchange',
  'GetMarketSummary' => 'XiQuotesTypeGetMarketSummary',
  'GetMarketSummaryResponse' => 'XiQuotesTypeGetMarketSummaryResponse',
  'MarketSummary' => 'XiQuotesTypeMarketSummary',
  'ArrayOfIndex' => 'XiQuotesTypeArrayOfIndex',
  'Index' => 'XiQuotesTypeIndex',
  'ArrayOfIndicator' => 'XiQuotesTypeArrayOfIndicator',
  'Indicator' => 'XiQuotesTypeIndicator',
  'GetIndices' => 'XiQuotesTypeGetIndices',
  'GetIndicesResponse' => 'XiQuotesTypeGetIndicesResponse',
  'ArrayOfMarketIndex' => 'XiQuotesTypeArrayOfMarketIndex',
  'MarketIndex' => 'XiQuotesTypeMarketIndex',
  'GetTick' => 'XiQuotesTypeGetTick',
  'GetTickResponse' => 'XiQuotesTypeGetTickResponse',
  'SingleTick' => 'XiQuotesTypeSingleTick',
  'GetTicks' => 'XiQuotesTypeGetTicks',
  'GetTicksResponse' => 'XiQuotesTypeGetTicksResponse',
  'Ticks' => 'XiQuotesTypeTicks',
  'ArrayOfTick' => 'XiQuotesTypeArrayOfTick',
  'Tick' => 'XiQuotesTypeTick',
  'GetClosingTicks' => 'XiQuotesTypeGetClosingTicks',
  'GetClosingTicksResponse' => 'XiQuotesTypeGetClosingTicksResponse',
  'GetClosingTicksAsOfDate' => 'XiQuotesTypeGetClosingTicksAsOfDate',
  'GetClosingTicksAsOfDateResponse' => 'XiQuotesTypeGetClosingTicksAsOfDateResponse',
  'GetTickHistogram' => 'XiQuotesTypeGetTickHistogram',
  'GetTickHistogramResponse' => 'XiQuotesTypeGetTickHistogramResponse',
  'Histogram' => 'XiQuotesTypeHistogram',
  'ArrayOfBar' => 'XiQuotesTypeArrayOfBar',
  'Bar' => 'XiQuotesTypeBar',
  'GetHistoricalTickHistogram' => 'XiQuotesTypeGetHistoricalTickHistogram',
  'GetHistoricalTickHistogramResponse' => 'XiQuotesTypeGetHistoricalTickHistogramResponse',
  'GetTickCollections' => 'XiQuotesTypeGetTickCollections',
  'GetTickCollectionsResponse' => 'XiQuotesTypeGetTickCollectionsResponse',
  'ArrayOfTicks' => 'XiQuotesTypeArrayOfTicks',
  'GetHistoricalTicksAsOfDate' => 'XiQuotesTypeGetHistoricalTicksAsOfDate',
  'GetHistoricalTicksAsOfDateResponse' => 'XiQuotesTypeGetHistoricalTicksAsOfDateResponse',
  'GetMarketChart' => 'XiQuotesTypeGetMarketChart',
  'GetMarketChartResponse' => 'XiQuotesTypeGetMarketChartResponse',
  'HTMLResult' => 'XiQuotesTypeHTMLResult',
  'GetDelayedChart' => 'XiQuotesTypeGetDelayedChart',
  'GetDelayedChartResponse' => 'XiQuotesTypeGetDelayedChartResponse',
  'IntradayChart' => 'XiQuotesTypeIntradayChart',
  'StockChart' => 'XiQuotesTypeStockChart',
  'ChartDesign' => 'XiQuotesTypeChartDesign',
  'Security' => 'XiQuotesTypeSecurity',
  'GetDelayedBinaryChart' => 'XiQuotesTypeGetDelayedBinaryChart',
  'GetDelayedBinaryChartResponse' => 'XiQuotesTypeGetDelayedBinaryChartResponse',
  'GetDelayedChartPreset' => 'XiQuotesTypeGetDelayedChartPreset',
  'GetDelayedChartPresetResponse' => 'XiQuotesTypeGetDelayedChartPresetResponse',
  'GetDelayedChartCustom' => 'XiQuotesTypeGetDelayedChartCustom',
  'GetDelayedChartCustomResponse' => 'XiQuotesTypeGetDelayedChartCustomResponse',
  'GetDelayedChartAsOfDate' => 'XiQuotesTypeGetDelayedChartAsOfDate',
  'GetDelayedChartAsOfDateResponse' => 'XiQuotesTypeGetDelayedChartAsOfDateResponse',
  'GetDelayedBinaryChartAsOfDate' => 'XiQuotesTypeGetDelayedBinaryChartAsOfDate',
  'GetDelayedBinaryChartAsOfDateResponse' => 'XiQuotesTypeGetDelayedBinaryChartAsOfDateResponse',
  'GetDelayedChartAsOfDatePreset' => 'XiQuotesTypeGetDelayedChartAsOfDatePreset',
  'GetDelayedChartAsOfDatePresetResponse' => 'XiQuotesTypeGetDelayedChartAsOfDatePresetResponse',
  'GetDelayedChartAsOfDateCustom' => 'XiQuotesTypeGetDelayedChartAsOfDateCustom',
  'GetDelayedChartAsOfDateCustomResponse' => 'XiQuotesTypeGetDelayedChartAsOfDateCustomResponse',
  'GetChartDesign' => 'XiQuotesTypeGetChartDesign',
  'GetChartDesignResponse' => 'XiQuotesTypeGetChartDesignResponse',
  'GetHistoricalTicks' => 'XiQuotesTypeGetHistoricalTicks',
  'GetHistoricalTicksResponse' => 'XiQuotesTypeGetHistoricalTicksResponse',
  'GetFundQuote' => 'XiQuotesTypeGetFundQuote',
  'GetFundQuoteResponse' => 'XiQuotesTypeGetFundQuoteResponse',
  'ExtendedFundQuote' => 'XiQuotesTypeExtendedFundQuote',
  'FundQuote' => 'XiQuotesTypeFundQuote',
  'GetMissingTickRanges' => 'XiQuotesTypeGetMissingTickRanges',
  'GetMissingTickRangesResponse' => 'XiQuotesTypeGetMissingTickRangesResponse',
  'ArrayOfMissingTickRange' => 'XiQuotesTypeArrayOfMissingTickRange',
  'MissingTickRange' => 'XiQuotesTypeMissingTickRange',
  'OutcomeTypes' => 'XiQuotesTypeOutcomeTypes',
  'IdentifierTypes' => 'XiQuotesTypeIdentifierTypes',
  'TopTypes' => 'XiQuotesTypeTopTypes',
  'TickPeriod' => 'XiQuotesTypeTickPeriod',
  'StockChartStyles' => 'XiQuotesTypeStockChartStyles',
  'LinePattern' => 'XiQuotesTypeLinePattern',
  'ImageFrameType' => 'XiQuotesTypeImageFrameType',
  'PredefinedProjection' => 'XiQuotesTypePredefinedProjection',
  'HorzAlign' => 'XiQuotesTypeHorzAlign',
  'PredefinedLightModel' => 'XiQuotesTypePredefinedLightModel',
  'HistoricalPeriods' => 'XiQuotesTypeHistoricalPeriods',
);
	}
}
?>