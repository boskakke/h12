WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:04:17

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp
- log-call-arguments: true
- converters: (array of 9 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 60
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 60
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
The near-lossless option ignored for lossy
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg
Dimension: 1024 x 592
Output:    84074 bytes Y-U-V-All-PSNR 36.83 43.00 44.94   38.18 dB
           (1.11 bpp)
block count:  intra4:       1959  (82.73%)
              intra16:       409  (17.27%)
              skipped:        24  (1.01%)
bytes used:  header:            186  (0.2%)
             mode-partition:   9477  (11.3%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |   65781 |     130 |      45 |      48 |   66004  (78.5%)
 intra16-coeffs:  |    1079 |      49 |      84 |     355 |    1567  (1.9%)
  chroma coeffs:  |    6360 |      33 |      38 |     382 |    6813  (8.1%)
    macroblocks:  |      83%|       1%|       1%|      15%|    2368
      quantizer:  |      31 |      24 |      16 |      16 |
   filter level:  |      13 |       6 |       3 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |   73220 |     212 |     167 |     785 |   74384  (88.5%)

Success
Reduction: 42% (went from 141 kb to 82 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version. Result: *Exec failed* (the cwebp binary was not found at path: cwebp)
Nope a plain cwebp call does not work
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 0 binaries
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/local/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Darwin)... We do.
Found 1 binaries: 
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14
Detecting versions of the cwebp binaries found
- Executing: /usr/local/bin/cwebp -version. Result: version: *1.0.3*
- Executing: [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14 -version. Result: version: *1.0.3*
Binaries ordered by version number.
- /usr/local/bin/cwebp: (version: 1.0.3)
- [doc-root]/app/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-mac-10_14: (version: 1.0.3)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 1.0.3
Trying to convert by executing the following command:
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2-1024x592.jpg
Dimension: 1024 x 592
Output:    417696 bytes (5.51 bpp)
Lossless-ARGB compressed size: 417696 bytes
  * Header size: 3695 bytes, image data size: 413975
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=4 transform=4 cache=10

Success
Reduction: -190% (went from 141 kb to 408 kb)

Picking lossy
cwebp succeeded :)

Converted image in 2163 ms, reducing file size with 42% (went from 141 kb to 82 kb)
