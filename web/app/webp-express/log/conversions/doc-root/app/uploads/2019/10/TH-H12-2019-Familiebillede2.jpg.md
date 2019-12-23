WebP Express 0.17.2. Conversion triggered using bulk conversion, 2019-12-23 10:06:47

*WebP Convert 2.3.0*  ignited.
- PHP version: 7.3.8
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp
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
- source: [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg
- destination: [doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp
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
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp.lossy.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp.lossy.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg
Dimension: 1599 x 925
Output:    198954 bytes Y-U-V-All-PSNR 36.54 41.87 44.54   37.83 dB
           (1.08 bpp)
block count:  intra4:       4724  (81.45%)
              intra16:      1076  (18.55%)
              skipped:       117  (2.02%)
bytes used:  header:            237  (0.1%)
             mode-partition:  23166  (11.6%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |  156217 |     741 |     274 |     108 |  157340  (79.1%)
 intra16-coeffs:  |    2016 |     300 |     219 |     691 |    3226  (1.6%)
  chroma coeffs:  |   13827 |     129 |     111 |     888 |   14955  (7.5%)
    macroblocks:  |      80%|       2%|       2%|      16%|    5800
      quantizer:  |      32 |      25 |      16 |      16 |
   filter level:  |      20 |      22 |       3 |       3 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |  172060 |    1170 |     604 |    1687 |  175521  (88.2%)

Success
Reduction: 52% (went from 409 kb to 194 kb)

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
nice /usr/local/bin/cwebp -metadata none -q 70 -alpha_q '85' -near_lossless 60 -m 6 -low_memory '[doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg' -o '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp.lossless.webp' 2>&1

*Output:* 
Saving file '[doc-root]/app/webp-express/webp-images/doc-root/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg.webp.lossless.webp'
File:      [doc-root]/app/uploads/2019/10/TH-H12-2019-Familiebillede2.jpg
Dimension: 1599 x 925
Output:    1055334 bytes (5.71 bpp)
Lossless-ARGB compressed size: 1055334 bytes
  * Header size: 6365 bytes, image data size: 1048943
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=4 cache=10

Success
Reduction: -152% (went from 409 kb to 1031 kb)

Picking lossy
cwebp succeeded :)

Converted image in 4911 ms, reducing file size with 52% (went from 409 kb to 194 kb)
